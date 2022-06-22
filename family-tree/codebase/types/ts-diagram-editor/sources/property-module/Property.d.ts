import { IData, IProperty, IPropertyConfig, PropertyEvents } from "./types";
import { IEventSystem } from "../../../ts-common/events";
import { View } from "../../../ts-common/view";
import { IDataCollection } from "../../../ts-data";
export declare class Property extends View implements IProperty {
    events: IEventSystem<PropertyEvents>;
    data: IDataCollection;
    private _data;
    constructor(cont: string | HTMLElement, config?: IPropertyConfig);
    clear(): void;
    getValues(): IData;
    setValues(data: IData): void;
    isItemSelected(id: string): boolean;
    isItemsSelected(): boolean;
    selectItem(id: string): void;
    private _parseStruct;
    private _toVDOM;
}
