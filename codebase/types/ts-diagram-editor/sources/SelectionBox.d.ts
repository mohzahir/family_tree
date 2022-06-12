import { ICoords } from "../../ts-diagram";
export declare class SelectionBox {
    start: ICoords;
    end: ICoords;
    constructor(start: ICoords);
    render(): any;
    isValid(): boolean;
}
