export declare const meta: {
    arrangeGroup: {
        id: string;
        type: string;
        label: string;
        validate: string;
        options: {
            id: string;
            value: string;
            label: string;
            validate: string;
        }[];
    };
    fillGroup: {
        id: string;
        type: string;
        label: string;
    };
    strokeGroup: {
        id: string;
        type: string;
        label: string;
    };
    headerText: {
        id: string;
        type: string;
        label: string;
    };
    headerFill: {
        id: string;
        type: string;
        label: string;
    };
    headerStyle: {
        id: string;
        type: string;
        label: string;
    };
    headerPosition: {
        id: string;
        type: string;
        label: string;
    };
    headerEnable: {
        id: string;
        type: string;
        label: string;
    };
    subHeaderRowsEnable: {
        id: string;
        type: string;
        lable: string;
    };
    subHeaderColsEnable: {
        id: string;
        type: string;
        lable: string;
    };
    grid: {
        id: string;
        type: string;
        label: string;
        validate: string;
        options: {
            id: string;
            value: number;
            icon: () => any;
            validate: string;
        }[];
    };
    textPosition: {
        id: string;
        type: string;
        label: string;
        validate: string;
        options: {
            id: string;
            value: string;
            label: string;
            validate: string;
        }[];
    };
    arrange: {
        id: string;
        type: string;
        label: string;
        validate: string;
        options: ({
            id: string;
            value: string;
            label: string;
            validate: string;
            icon?: undefined;
        } | {
            id: string;
            value: string;
            label: string;
            validate: string;
            icon: () => any;
        })[];
    };
    position: {
        id: string;
        type: string;
        label: string;
        validate: string;
        options: {
            id: string;
            value: string;
            label: string;
            validate: string;
        }[];
    };
    size: {
        id: string;
        type: string;
        label: string;
        options: {
            id: string;
            value: string;
            label: string;
            validate: string;
        }[];
    };
    color: {
        id: string;
        type: string;
        label: string;
    };
    title: {
        id: string;
        type: string;
        label: string;
    };
    text: {
        id: string;
        type: string;
        label: string;
    };
    img: {
        id: string;
        type: string;
        label: string;
    };
    fill: {
        id: string;
        type: string;
        label: string;
    };
    textProps: {
        id: string;
        type: string;
        label: string;
    };
    strokeProps: {
        id: string;
        type: string;
        label: string;
    };
};
export declare function getMeta(properties: any): any[];
